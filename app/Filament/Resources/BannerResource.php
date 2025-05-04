<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image_path')
                    ->label('Banner Image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('banners')
                    ->preserveFilenames()
                    ->maxSize(5120)
                    ->visibility('public')
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1900')
                    ->imageResizeTargetHeight('1069')
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        $filename = $file->getClientOriginalName();
                        $path = 'banners/';
                        
                        // Create different sizes
                        $sizes = [80, 160, 320, 640, 960, 1280, 1900];
                        foreach ($sizes as $size) {
                            $image = \Intervention\Image\Facades\Image::make($file);
                            $image->resize($size, null, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                            $image->save(storage_path('app/public/' . $path . $size . 'w/' . $filename));
                        }
                        
                        return $path . $filename;
                    }),
                
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
                
                Forms\Components\TextInput::make('order')
                    ->label('Order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Banner')
                    ->size(100),
                
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->visible(function ($record) {
                        return $record?->page_type === 'category';
                    })
                    ->sortable(),
                
                Tables\Columns\BooleanColumn::make('is_active')
                    ->label('Active')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('order')
                    ->label('Order')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                
                Tables\Filters\Filter::make('active')
                    ->query(function (Builder $query) {
                        return $query->where('is_active', true);
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }    
}

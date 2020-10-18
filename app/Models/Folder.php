<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\Folder
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property int|null $folder_id
 * @property int|null $resource
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Folder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Folder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Folder query()
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereFolderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereResource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Folder extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'folder';
    
    /**
     * Get the comments for the blog post.
     */
    /*
    public function media()
    {
        return $this->hasMany('App\Models\Media');
    }
    */
}

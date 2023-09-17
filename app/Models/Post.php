<?php

namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [
        'setImage'
    ];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function setImage(array $data)
    {
        if(!isset($data['data']->id)) {
            foreach ($data['data'] as $i => $post) {
                if ($post->image) {
                    $data['data'][$i]->image = env('app.mainURL') . '/uploads/posts/' . $post->image;
                } else {
                    $data['data'][$i]->image = base_url('assets/img/logo_only.png');
                }
            }
        } else {
            if ($data['data']->image) {
                $data['data']->image = env('app.mainURL') . '/uploads/posts/' . $data['data']->image;
            } else {
                $data['data']->image = base_url('assets/img/logo_only.png');
            }
        }
        return $data;
    }

    public function getCategory($id)
    {
        $postsCategory = new PostsCategories();
        $category = new Category();
        $postsCategory_result = $postsCategory->where('post_id', $id)->findAll();

        $result = [];

        if ($postsCategory_result) {
            foreach ($postsCategory_result as $i => $postCategory) {
                $result[$i] = $category->find($postCategory->category_id);
            }
        }

        return $result;
    }
}

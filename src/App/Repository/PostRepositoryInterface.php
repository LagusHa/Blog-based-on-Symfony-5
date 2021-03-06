<?php
/**
 * Created by PhpStorm.
 * User: gotohell
 * Date: 2020-09-04
 * Time: 21:50
 */

namespace App\Repository;


use App\Entity\Post;
use Symfony\Component\HttpFoundation\File\UploadedFile;

interface PostRepositoryInterface
{
    /**
     * @return array
     */
    public function getAllPost(): array ;

    /**
     * @param int $postId
     * @return Post
     */
    public function getOnePost(int $postId): object;

    /**
     * @param Post $post
     * @param UploadedFile $file
     * @return Post
     */
    public function setCreatePost(Post $post, UploadedFile $file): object;

    /**
     * @param Post $post
     * @param UploadedFile $file
     * @return Post
     */
    public function setUpdatePost(Post $post, UploadedFile $file): object;

    /**
     * @param Post $post
     */
    public function setDeletePost(Post $post);
}
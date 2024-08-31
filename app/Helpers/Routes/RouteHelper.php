<?php

namespace App\Helpers\Routes;

class RouteHelper
{
    public static function getRouteName(string $folder)
    {
        $dirIteratetor = new \RecursiveDirectoryIterator($folder);
        $it = new \RecursiveIteratorIterator($dirIteratetor);
        while ($it->valid()) {
            if (
                $it->isFile()
                && $it->isReadable()
                && $it->current()->getExtension() === 'php'
                && !$it->isDot()
            ) {
                require $it->key();
            }
            $it->next();
        }


        // foreach ($it as $file) {
        //     if ($file->isFile()) {
        //         require $file->getPathname();
        //     }
        // }

        // require __DIR__.'/api/v1/users.php';
        // require __DIR__.'/api/v1/posts.php';
        // require __DIR__.'/api/v1/comments.php';
    }
}

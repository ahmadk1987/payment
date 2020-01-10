<?php
    namespace Roocket\Cms;
    use Roocket\Cms\Models\Admin;

    class Cms{
        public function listAdmin()
        {
            return Admin::lists('username');
        }

    }

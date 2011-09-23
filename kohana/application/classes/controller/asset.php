<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Asset extends Controller
{
    public function action_process() {
        $type = $this->request->param('type', NULL);
        $asset = $this->request->param('file', NULL);
        $asset = str_replace(array('.css', '.js'), '', $asset);
        $view = View::factory($type.'/'.$asset);
        echo (string)$view->render();
    }
}
?>

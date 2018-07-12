<?php

namespace App\Entries;

class EntryController
{
    protected function render($view, $parameter)
    {
        foreach ($parameter as $key => $value) {
            ${$key} = $value;
        }

        include __DIR__ . "/../../views/entries/{$view}.php";
    }

    protected function renderSite($view)
    {
        include __DIR__ . "/../../views/entries/{$view}.php";
    }

    public function fetchEntries($pdo)
    {
        $model = new EntryModel($pdo);
        if (isset($_POST['content'])) {
            $content = $_POST['content'];
            $title = $_POST['title'];
            $model->setNewEntry($title, $content);
        }
        $entries = $model->getAllEntries();
        $this->render("entries", ['entries' => $entries]);
    }

    public function index()
    {
        $this->renderSite("index");
    }
}

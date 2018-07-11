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
        $allEntries = new EntryModel($pdo);
        $entries = $allEntries->getAllEntries();
        $this->render("entries", ['entries' => $entries]);
    }

    public function index()
    {
        $this->renderSite("index");
    }
}

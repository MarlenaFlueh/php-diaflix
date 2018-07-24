<?php

namespace App\Entries;

use App\Core\AbstractController;

class EntryController extends AbstractController
{
    public function fetchEntries($pdo)
    {
        $model = new EntryModel($pdo);
        if (isset($_POST['content'])) {
            $content = $_POST['content'];
            $title = $_POST['title'];
            $model->setNewEntry($title, $content);
        }
        $entries = $model->getAllEntries();
        $this->renderParam("entries/entries", ['entries' => $entries]);
    }

    public function index()
    {
        $this->render("entries/index");
    }
}

<?php

namespace App\Entries;

use App\Core\AbstractController;

class EntryController extends AbstractController
{
    public function fetchEntries($pdo)
    {
        $model = new EntryModel($pdo);
        if (isset($_POST['content'])) {
            $userid = $_SESSION['userid'];
            $content = $_POST['content'];
            $title = $_POST['title'];
            $model->setNewEntry($userid, $title, $content);
        }
        $entries = $model->getFilteredEntries($_SESSION['userid']);
        $this->renderParam("entries/entries", ['entries' => $entries]);
    }

    public function index()
    {
        $this->render("entries/index");
    }
}

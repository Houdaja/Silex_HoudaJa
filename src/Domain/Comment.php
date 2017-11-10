<?php

namespace Silex_HoudaJa\Domain;

Class Comment {

    /**
     * Comment id.
     *
     * @var integer
     */
    private $id;

    /**
     * Comment author
     *
     * @var string
     *
     */
    private $author;

    /**
     * comment author
     *
     * @var integer

     */
    private $content;

    /**
     * Associated article
     * @var\Silex_HoudaJa\Article
     */
    private $article;

    public function getId() {
        return $this->id;
    }

    public function getAuthor() {
        return $this->id;
    }

    public function getContent() {
        return $this->content;
    }

    public function getArticle() {
        return $this->article;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function setArticle($article) {
        $this->article = $article;
        return $this;
    }

}

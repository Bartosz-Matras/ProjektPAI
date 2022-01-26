<?php

class Tag
{

    private $idTag;
    private $tagName;

    public function __construct($idTag, $tagName)
    {
        $this->idTag = $idTag;
        $this->tagName = $tagName;
    }

    public function getIdTag()
    {
        return $this->idTag;
    }

    public function setIdTag($idTag): void
    {
        $this->idTag = $idTag;
    }

    public function getTagName()
    {
        return $this->tagName;
    }

    public function setTagName($tagName): void
    {
        $this->tagName = $tagName;
    }



}
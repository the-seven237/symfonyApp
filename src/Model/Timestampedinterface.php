<?php

namespace  App\Model;

interface Timestampedinterface{
    public  function getCreatedAt(): ?\DateTimeInterface;

    public  function setCreatedAt(\DateTimeInterface $createdAt);


    public  function getUpdatedAt(): ?\DateTimeInterface;

    public  function setUpdatedAt(?\DateTimeInterface $updatedAt);
}
<?php

namespace App\Models\common;

class DocumentVideo extends \App\Models\CallModel
{
    public $table = 'common_document_video';

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $aid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $file_id;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=false)
     */
    public $description;
}

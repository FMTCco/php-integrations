<?php

namespace FMTCco\Integrations\Apis\ImpactRadius\Responses;


use FMTCco\Integrations\Traits\SimpleSerializable;
use jamesvweston\Utilities\ArrayUtil as AU;

class GetActionsResponse implements \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $numpages;

    /**
     * @var int
     */
    protected $pagesize;

    /**
     * @var int
     */
    protected $total;

    /**
     * @var int
     */
    protected $start;

    /**
     * @var int
     */
    protected $end;

    /**
     * @var string
     */
    protected $uri;

    /**
     * @var string
     */
    protected $firstpageuri;

    /**
     * @var string|null
     */
    protected $previouspageuri;

    /**
     * @var string|null
     */
    protected $nextpageuri;

    /**
     * @var string
     */
    protected $lastpageuri;

    /**
     * @var Action[]
     */
    protected $data;


    public function __construct($data = [])
    {
        $this->page                     = AU::get($data['@page']);
        $this->numpages                 = AU::get($data['@numpages']);
        $this->pagesize                 = AU::get($data['@pagesize']);
        $this->total                    = AU::get($data['@total']);
        $this->start                    = AU::get($data['@start']);
        $this->end                      = AU::get($data['@end']);
        $this->uri                      = AU::get($data['@uri']);
        $this->firstpageuri             = AU::get($data['@firstpageuri']);
        $this->previouspageuri          = AU::get($data['@previouspageuri']);
        $this->nextpageuri              = AU::get($data['@nextpageuri']);
        $this->lastpageuri              = AU::get($data['@lastpageuri']);
        $this->end                      = AU::get($data['@end']);

        $this->data                     = [];
        if (isset($data['Action'])) {
            $this->data                 = $data['Action'];
        }
        if (isset($data['Actions'])) {
            $this->data                 = $data['Actions'];
        }
    }

    public function clean()
    {
        $this->page                     = intval($this->page);
        $this->numpages                 = intval($this->numpages);
        $this->pagesize                 = intval($this->pagesize);
        $this->total                    = intval($this->total);
        $this->start                    = intval($this->start);
        $this->end                      = intval($this->end);

        if (empty($this->previouspageuri)) {
            $this->previouspageuri      = null;
        }

        if (empty($this->nextpageuri)) {
            $this->nextpageuri          = null;
        }

        if (!AU::isArrays($this->data)) {
            $this->data                 = [$this->data];
        }

        for ($i = 0; $i < sizeof($this->data); $i++) {
            $this->data[$i]             = new Action($this->data[$i]);
            $this->data[$i]->clean();
        }
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getNumpages()
    {
        return $this->numpages;
    }

    /**
     * @return int
     */
    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getFirstpageuri()
    {
        return $this->firstpageuri;
    }

    /**
     * @return null|string
     */
    public function getPreviouspageuri()
    {
        return $this->previouspageuri;
    }

    /**
     * @return null|string
     */
    public function getNextpageuri()
    {
        return $this->nextpageuri;
    }

    /**
     * @return string
     */
    public function getLastpageuri()
    {
        return $this->lastpageuri;
    }

    /**
     * @return Action[]
     */
    public function getData()
    {
        return $this->data;
    }
}

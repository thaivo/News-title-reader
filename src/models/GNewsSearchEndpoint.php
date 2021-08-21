<?php

namespace Api\Newsreader;

class GNewsSearchEndpoint extends GNewsEndpoint
{
    public $in;
    public $sortBy;
    const SEARCH = 'search?';
    public function __construct($searchText, $lang, $country, $fromDate, $toDate, $in, $sortBy)
    {
        parent::__construct($searchText, $lang, $country, $fromDate, $toDate);
        $this->in = $in;
        $this->sortBy = $sortBy;
    }

    public function GetFilterString()
    {
        $result = parent::GetFilterString(); // TODO: Change the autogenerated stub
        if(!empty($this->in)){
            if (!empty($result)){
                $result .= '&';
            }
            $result .= 'in='.$this->in;
        }
        if (!empty($this->sortBy)){
            if (!empty($result)){
                $result .= '&';
            }
            $result .= 'sortBy='.$this->sortBy;
        }
        return self::SEARCH.$result;
    }

}
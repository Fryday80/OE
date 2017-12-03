<?php
class Entry
{
    public $date;
    public $time;
    public $title;
    public $information;
    public $year;
    public $place = 'Bürgersaalkirche';
    public $picPath = null;
    public $timestamp;

    private $dateString;

    public function __construct($year)
    {
        $this->year = $year;
    }

    public function getHTML()
    {
        $this->refactorData();
        $return = "";
		if ($this->hasPic()) $return .= $this->showPic();
        $return  .= "<h2><strong>$this->dateString<br/>";
        $return .= $this->title . ", $this->place</strong></h2><br/>";
        $return .= $this->information . "<br/><br/><br/>";
        return $return;
    }

    public function getTimestamp()
    {
        return $this->timestamp = strtotime($this->date . ' ' . $this->time);
    }

    public function setPicture($path){
    	if( file_exists(getcwd() . $path)){
			$this->picPath = $path;
		}
		else $this->picPath = null;
	}

	public function hasPic(){
    	if ($this->picPath === null) return false;
    	return true;
	}

	public function showPic() {
		return "<img src='$this->picPath' alt='img' style='height: 150px; '>";
	}

    private function refactorData()
    {
        $dayNumber = (int)date('N', $this->timestamp);
        $day = date('d. ', $this->timestamp);
        $month = (int)date('m', $this->timestamp);
        $time = date('H:i', $this->timestamp);
        $this->dateString = EDate::WEEK_DAYS[$dayNumber] . ', ' . $day . EDate::MONTHS[$month] . $this->year . ', ' . $time . 'Uhr';
    }
}
abstract class EDate
{
    const WEEK_DAYS = array(
        0 => '',
        1 => 'Montag',
        2 => 'Dienstag',
        3 => 'Mittwoch',
        4 => 'Donnerstag',
        5 => 'Freitag',
        6 => 'Samstag',
        7 => 'Sonntag'
    );
    const MONTHS = array (
        1 => 'Januar ',
        2 => 'Februar ',
        3 => 'März ',
        4 => 'April ',
        5 => 'Mai ',
        6 => 'Juni ',
        7 => 'Juli ',
        8 => 'August ',
        9 => 'September ',
        10 => 'Oktober ',
        11 => 'November ',
        12 => 'Dezember ',
    );
}
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
    private $imagesDir = "/images/Konzerte/";

    public function __construct($year)
    {
        $this->year = $year;
    }

    public function getHTML()
    {
        $this->refactorData();
        $return = "<div class='entry' style='min-height: 160px;'>";
		if ($this->hasPic()) $return .= $this->showPic();
        $return  .= "<h2><strong>$this->dateString<br/>";
        $return .= $this->title . ", $this->place</strong></h2><br/>";
        $return .= $this->information . "<br/><br/><br/></div>";
        return $return;
    }

    public function getTimestamp()
    {
        return $this->timestamp = strtotime($this->date . ' ' . $this->time);
    }

    public function setPicture($path){
    	if (!($path === null)){
			if( file_exists(getcwd() . $path)){
				$this->picPath = $path;
				return;
			}
		}
		$this->picPath = null;
    	return;
	}

	public function hasPic(){
    	if ($this->picPath === null) return false;
    	return true;
	}

	public function showPic() {
		return "<img src='$this->picPath' alt='img' style='height: 150px; float: right;'>";
	}

    private function refactorData()
    {
    	if ($this->picPath === null){
			$parts = explode(".", $this->date);
			if (count($parts) === 3){
				$invertDate = $parts[2] . '.' . sprintf('%02d', $parts[1]) . '.' . sprintf('%02d', $parts[0]);
				if( file_exists(getcwd() . $this->imagesDir . $invertDate . '.jpg')){
					$this->picPath = $this->imagesDir . $invertDate . '.jpg';
				}
				if( file_exists(getcwd() . $this->imagesDir . $invertDate . '.jpeg')){
					$this->picPath = $this->imagesDir . $invertDate . '.jpeg';
				}
				if( file_exists(getcwd() . $this->imagesDir . $invertDate . '.png')){
					$this->picPath = $this->imagesDir . $invertDate . '.png';
				}
			}
		}
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
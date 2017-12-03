

<?php Class Nav {
    private $n;
    private $s2;
    private $s1;
    private $subCount = 0;
    
    private $mainItemClass = array (
		0 => "mainnavi",
		1 => "mainnaviaktiv"
	);
    private $subItemClass = array (
            0 => "subnavi",
            1 => "subnaviaktiv"
    );
    private $mainLinkClass = "navilink";
    private $subLinkClass = "subnavilink";
    
    private $navDecal = '<div class="navideko"></div>';
    
    private $linkList;
    
    function __construct($site, $s2 = null, $s1 = null){
		$this->n = $site;
		$this->s2 = $s2;
		$this->s1 = $s1;
		$this->getLinks();
    }

    public function show(){
		return $this->getHTML();
    }
    
    private function getHTML()
	{
	    $navResult = "";
		foreach ($this->linkList as $mainEntry){
		    $sub = (key_exists("sub", $mainEntry))?:false;
		    if ($sub){
				$navResult .= $this->navDecal;
				$activeSub = '';
				$inactivSub = '';
		        if ($mainEntry['url'] == "Aktuelles"){
					if ($this->s1 == '1' || $this->s1 == '2'){
						$this->subCount = 0;
						$navResult .= $this->link_mainActive($mainEntry);
						$navResult .= ($this->s2 == '1')?$this->link_subActive($mainEntry['sub'][$this->subCount]):$this->link_subInactive($mainEntry['sub'][$this->subCount]);
						$navResult .= ($this->s2 == '2')?$this->link_subActive($mainEntry['sub'][$this->subCount]):$this->link_subInactive($mainEntry['sub'][$this->subCount]);
					}
					else {
						$navResult .= $this->link_mainInactive($mainEntry);
					}
                }
                if ($mainEntry['url'] == "Media"){
		            if ($this->s2 == '1' || $this->s2 == '2' || $this->s2 == '3'){
						$this->subCount = 0;
						$navResult .= $this->link_mainActive($mainEntry);
						$navResult .= ($this->s2 == '1')?$this->link_subActive($mainEntry['sub'][$this->subCount]):$this->link_subInactive($mainEntry['sub'][$this->subCount]);
						$navResult .= ($this->s2 == '2')?$this->link_subActive($mainEntry['sub'][$this->subCount]):$this->link_subInactive($mainEntry['sub'][$this->subCount]);
						$navResult .= ($this->s2 == '3')?$this->link_subActive($mainEntry['sub'][$this->subCount]):$this->link_subInactive($mainEntry['sub'][$this->subCount]);
					}
		            else {
						$navResult .= $this->link_mainInactive($mainEntry);
		            }
                }
            }
            else{
				$navResult .= $this->navDecal;
				$navResult .= $this->link_mainInactive($mainEntry);
            }
        }
        $navResult .= $this->navDecal;
        return $navResult;
	}

	private function link_mainActive($mainEntry){
        return '<div class="' . $this->mainItemClass[1] . '">' . $mainEntry['name'] . '</div>';
    }
	private function link_mainInactive($mainEntry){
        return '<div class="' . $this->mainItemClass[0] . '">' .
			'<a href="' . $mainEntry['url'] . '" class="' . $this->mainLinkClass . '">' . $mainEntry['name'] . '</a>' .
			'</div>';
    }
    private function link_subActive($sub){
	    $this->subCount++;
		return '<div class="' . $this->subItemClass[1] . '">' . $sub['name'] . '</div>';
    }
    private function link_subInactive($sub){
		$this->subCount++;
		return '<div class="' . $this->subItemClass[0] . '">' .
		'<a href="' . $sub['url'] . '" class="' . $this->subLinkClass . '">' . $sub['name'] . '</a>' .
		'</div>';

	}

	private function getLinks(){
        $this->linkList = array(
            0 => array(
                    "url" => "Profil",
                    "name"=> "Über uns",
            ),
            1 => array (
                "url"  => "Aktuelles",
                "name" => "Aktuelles",
                "sub"  => array(
                    0=> array(
                        "url"  => "Aktuelles",
                        "name" => "Ausblick",
                        ),
                    1 => array (
                        "url"  => "Archiv",
                        "name" => "Archiv",
                        ),
                ),
            ),
            2 => array(
				"url"  => "Vorverkauf",
				"name" => "Vorverkauf",
			),
            3 => array(
				"url"  => "DDr.Hartmann",
				"name" => "Prof. DDr. Michael Hartmann",
			),
			4 => array (
				"url"  => "Media",
				"name" => "Media",
				"sub"  => array(
					0=> array(
						"url"  => "CD",
						"name" => "CD'S",
					),
					1 => array (
						"url"  => "Proben",
						"name" => "Hörproben",
					),
					2 => array (
						"url"  => "DVD",
						"name" => "DVD's",
					),
				),
			),
			5 => array(
				"url"  => "Kontakt",
				"name" => "Kontakt",
			),
			/*
			6 => array(
				"url"  => "Antrag",
				"name" => "Mitgliedsantrag",
			),
			*/ /*
			7 => array(
				"url"  => "Mitglieder",
				"name" => "Mitgliederbereich",
			),
			*/ /*
			8 => array(
				"url"  => "Anzeigen",
				"name" => "Suchanzeige",
			),
			*/
        );
    }
}
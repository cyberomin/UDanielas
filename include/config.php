<?php
class Config 
{
	private $url = "uduakdaniel.com";
	private $title = "Uduak Daniel &mdash; ";
	private $meta_keywords = "Uduak Daneil, Minister, Pastor, Psalmist, Dominion High Commission, Author";

	private $meta_description = "Uduak Daniel is pastor, psalmist, recording artiste, authour, composer, researcher,
								speaker and development practitioner. She co-oversees Dominion High Commission 
								International Church in Nigeria, and is the founder and programme director of 
								Development Options International- a failth-based initiative. She also serves with the 
								National Agency for the Control of AIDS as the chief programme officer, prevention 
								and social and behavior change communication (SBCC). She has membership in key 
								decision making bodies in research and public health.";


	public $links = array("Home"=>"/","Meet Uduak"=>"about","Media"=>"media",
							"News"=>"news",
							"Contact"=>"contact",
							"Blog" => "http://blog.uduakdaniel.com/");

	public function getTitle($extras="")
	{
		return $this->title." ".$extras;
	}

	public function getUrl()
	{
		if ($_SERVER['HTTP_HOST'] != "uduakdaniel.com")
		{
			return "local".$this->url;
		}
		return $this->url;
	}

	public function getMetaDesc()
	{
		return $this->meta_description;
	}

	public function getMetaKeywords()
	{
		return $this->meta_keywords;
	}

	public function getMenu()
	{
		return $this->links;
	}

}
?>
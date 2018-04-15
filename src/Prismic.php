<?php 

namespace TedbreeDigital\Prismic;

use Prismic\Api;
use Prismic\Dom\Link;
use Prismic\Dom\Date;
use Prismic\Dom\RichText;
use TedbreeDigital\Prismic\Contracts\LinkResolverInterface;

class Prismic {

	public $api;
	public $linkResolver;

	public function __construct(LinkResolverInterface $linkResolver) { 
		$this->api = Api::get(config('prismic.url'));
		$this->linkResolver = $linkResolver;
	}

	public function linkAsUrl() { 
		$document = $this->api->getByUID('get-started');
		return Link::asUrl($document->data->link, $this->linkResolver);
	}

	public function richTextAsText($uid = 'get-started') { 
		$document = $this->api->getByUID($uid);
		return RichText::asText($document->data->title);
	}

	public function richTextAsHtml($uid = 'get-started') { 
		$document = $this->api->getByUID($uid);
		return RichText::asHtml($document->data->description, $this->linkResolver);
	}

	public function dateAsFormat($uid = 'get-started', $format = 'Y-m-d H:i:s') { 
		$document = $this->api->getByUID($uid);
		return Date::asDate($document->data->date)->format($format);
	}
}
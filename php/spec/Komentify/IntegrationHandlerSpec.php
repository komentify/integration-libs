<?php

namespace spec\Komentify;

use Komentify\Exception\InvalidConfigurationException;
use Komentify\IntegrationHandler;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IntegrationHandlerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith([
            'appId' => 'myAppId',
            'elementId' => 'myElId'
        ]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(IntegrationHandler::class);
    }

    function it_throws_error_on_invalid_configuration()
    {
        $this->beConstructedWith([]);
        $this->shouldThrow(InvalidConfigurationException::class)->duringInstantiation();
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldBe('http://www.komentify.io/api/embed?appId=myAppId&selectorId=myElId');
    }

    function it_returns_valid_script()
    {
        $this->getScriptSnippet()->shouldBe('<script src="http://www.komentify.io/api/embed?appId=myAppId&selectorId=myElId"></script>');
    }

    function it_returns_url_with_site_id()
    {
        $this->beConstructedWith([
            'appId' => 'myAppId',
            'elementId' => 'myElId',
            'siteId' => 'news_about_peter'
        ]);

        $this->getUrl()->shouldBe('http://www.komentify.io/api/embed?appId=myAppId&selectorId=myElId&siteId=news_about_peter');
    }
}

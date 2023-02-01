<?php
namespace Pixzl\HideCopyright;

use Shopware\Storefront\Page\Checkout\Confirm\CheckoutConfirmPageLoadedEvent;
use Shopware\Storefront\Page\PageLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class PixzlHideCopyright implements EventSubscriberInterface
{
    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents(): array
    {
        return [
            PageLoadedEvent::class => 'onPageLoaded',
            CheckoutConfirmPageLoadedEvent::class => 'onPageLoaded',
        ];
    }

    public function onPageLoaded(PageLoadedEvent $event): void
    {
        $page = $event->getPage();
        $page->setCopyright(

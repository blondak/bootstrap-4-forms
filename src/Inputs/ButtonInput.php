<?php
/**
 * Created by Petr Čech (czubehead) : https://petrcech.eu
 * Date: 9.7.17
 * Time: 20:02
 * This file belongs to the project bootstrap-4-forms
 * https://github.com/czubehead/bootstrap-4-forms
 */

namespace Czubehead\BootstrapForms\Inputs;


use Czubehead\BootstrapForms\Traits\BootstrapButtonTrait;
use Nette\Forms\Controls\Button;
use Nette\Utils\Html;
use Stringable;

/**
 * Class ButtonInput.
 * Returns &lt;button&gt; whose content can be set as caption. This is not a submit button.
 * @package Czubehead\BootstrapForms
 * @property string $btnClass
 */
class ButtonInput extends Button
{
	use BootstrapButtonTrait;

	/**
	 * ButtonInput constructor.
	 * @param null|string|Html $content
	 */
	public function __construct($content = NULL)
	{
		parent::__construct($content);
    }
    
	/**
	 * Control HTML
	 * @param null|string|Html $content
	 * @return Html
	 */
	public function getControl(string|Stringable|null $content = NULL): Html
	{
		$btn = parent::getControl();
		$btn->setName('button');
		$btn->setHtml($content ?? (string) $this->caption);
		$this->addBtnClass($btn);

		return $btn;
	}
}
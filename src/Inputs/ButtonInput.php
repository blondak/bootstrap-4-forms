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


/**
 * Class ButtonInput.
 * Returns &lt;button&gt; whose content can be set as caption. This is not a submit button.
 * @package Czubehead\BootstrapForms
 * @property string $btnClass
 */
class ButtonInput extends Button
{
	use BootstrapButtonTrait;

	private $btnValue;

	/**
	 * ButtonInput constructor.
	 * @param null|string|Html $content
	 */
	public function __construct($content = NULL, $value = null)
	{
		parent::__construct($content);
		$this->btnValue = $value;
	}

	/**
	 * Control HTML
	 * @param null|string|Html $content
	 * @return Html
	 */
	public function getControl($content = NULL)
	{
		$btn = parent::getControl();
		$btn->setName('button');
		$btn->setHtml($content === NULL ? $this->caption : $content);
		if ($this->btnValue) {
			$btn->setValue($this->btnValue);
		}
		$this->addBtnClass($btn);

		return $btn;
	}
}
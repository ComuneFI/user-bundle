<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Factory;

use Symfony\Component\Form\FormFactoryInterface;

class FormFactory implements FactoryInterface
{
    /**
     * FormFactory constructor.
     *
     * @param string $name
     * @param string $type
     * @param array  $validationGroups
     */
    public function __construct(private readonly FormFactoryInterface $formFactory, private $name, private $type, private readonly ?array $validationGroups = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function createForm(array $options = [])
    {
        $options = array_merge(['validation_groups' => $this->validationGroups], $options);

        return $this->formFactory->createNamed($this->name, $this->type, null, $options);
    }
}

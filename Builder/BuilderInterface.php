<?php

declare(strict_types=1);

namespace SpecDoc\Contract\Builder;

use SpecDoc\Contract\Document\DocumentInterface;
use SpecDoc\Contract\Document\ElementInterface;
use SpecDoc\Contract\Exception\BuilderExceptionInterface;

interface BuilderInterface
{
    /**
     * Returns the document.
     *
     * @return DocumentInterface
     * @throws BuilderExceptionInterface
     */
    public function build(): DocumentInterface;

    /**
     * Returns the document element.
     *
     * @return ElementInterface
     * @throws BuilderExceptionInterface
     */
    public function buildElement(): ElementInterface;

    /**
     * Sets the tokens for build.
     *
     * @param iterable $tokens
     *
     * @return self
     */
    public function setTokens(iterable $tokens): self;

    /**
     * Sets the rules for building elements.
     *
     * @param iterable $rules
     *
     * @return self
     */
    public function setRules(iterable $rules): self;
}

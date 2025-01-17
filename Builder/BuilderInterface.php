<?php

declare(strict_types=1);

namespace SpecDoc\Contract\Builder;

use SpecDoc\Contract\Document\DocumentInterface;
use SpecDoc\Contract\Document\ElementInterface;
use SpecDoc\Contract\Exception\BuilderExceptionInterface;
use SpecDoc\Contract\Rule\BuildRuleInterface;
use SpecDoc\Contract\Token\TokenInterface;

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
     * @param list<TokenInterface> $tokens
     *
     * @return static
     */
    public function setTokens(array $tokens): static;

    /**
     * Sets the rules for building elements.
     *
     * @param list<BuildRuleInterface> $rules
     *
     * @return static
     */
    public function setRules(array $rules): static;
}

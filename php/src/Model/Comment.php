<?php

namespace Model {
    class Comment
    {
        public function __construct(private ?int $id = null, private ?string $name = null, private ?string $text = null)
        {
        }

        /**
         * Get the value of id
         */
        public function getId(): ?int
        {
            return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId(?int $id): self
        {
            $this->id = $id;

            return $this;
        }

        /**
         * Get the value of name
         */
        public function getName(): ?string
        {
            return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName(?string $name): self
        {
            $this->name = $name;

            return $this;
        }

        /**
         * Get the value of text
         */
        public function getText(): ?string
        {
            return $this->text;
        }

        /**
         * Set the value of text
         */
        public function setText(?string $text): self
        {
            $this->text = $text;

            return $this;
        }
    }
}

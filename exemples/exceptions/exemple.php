<?php

declare(strict_types=1);

namespace Lab\Categories {
    final class InvalidCategoryName extends \InvalidArgumentException
    {
    }

    final class CategoryName
    {
        public static function validate(string $name): string
        {
            $name = trim($name);

            if ($name === '') {
                throw new InvalidCategoryName('Le nom de la categorie est obligatoire.');
            }

            return $name;
        }
    }
}

namespace {
    use Lab\Categories\CategoryName;
    use Lab\Categories\InvalidCategoryName;

    foreach (['Boissons', '   '] as $input) {
        try {
            $name = CategoryName::validate($input);
            echo "Categorie valide : {$name}" . PHP_EOL;
        } catch (InvalidCategoryName $exception) {
            echo 'Erreur de saisie : ' . $exception->getMessage() . PHP_EOL;
        }
    }
}

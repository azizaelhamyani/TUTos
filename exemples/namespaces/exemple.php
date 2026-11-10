<?php

declare(strict_types=1);

namespace Lab\Domain {
    final class Category
    {
        public function __construct(
            public int $id,
            public string $name,
        ) {
        }
    }
}

namespace Lab\Presentation {
    use Lab\Domain\Category;

    final class CategoryLabel
    {
        public static function format(Category $category): string
        {
            return sprintf('#%d - %s', $category->id, $category->name);
        }
    }
}

namespace {
    use Lab\Domain\Category;
    use Lab\Presentation\CategoryLabel;

    $category = new Category(7, 'Boissons');

    echo CategoryLabel::format($category) . PHP_EOL;
}

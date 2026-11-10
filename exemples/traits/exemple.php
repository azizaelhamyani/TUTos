<?php

declare(strict_types=1);

namespace Lab\Shared {
    use DateTimeImmutable;

    trait HasCreationDate
    {
        private ?DateTimeImmutable $createdAt = null;

        public function markAsCreated(DateTimeImmutable $date): void
        {
            $this->createdAt = $date;
        }

        public function creationDateLabel(): string
        {
            return $this->createdAt?->format('Y-m-d') ?? 'Non enregistree';
        }
    }
}

namespace Lab\Catalog {
    use Lab\Shared\HasCreationDate;

    final class Category
    {
        use HasCreationDate;
    }

    final class Article
    {
        use HasCreationDate;
    }
}

namespace {
    use DateTimeImmutable;
    use Lab\Catalog\Article;
    use Lab\Catalog\Category;

    $createdAt = new DateTimeImmutable('2026-11-09 10:30:00');
    $category = new Category();
    $article = new Article();

    $category->markAsCreated($createdAt);
    $article->markAsCreated($createdAt);

    echo 'Categorie : ' . $category->creationDateLabel() . PHP_EOL;
    echo 'Article : ' . $article->creationDateLabel() . PHP_EOL;
}

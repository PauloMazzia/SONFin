<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: paulo.mazzia
 * Date: 19/10/2017
 * Time: 22:53
 */
namespace SONFin\Repository;

use Psr\Http\Message\RequestInterface;

interface CategoryCostRepositoryInterface extends RequestInterface
{
    public function sumByPeriod(string $dateStart, string $dateEnd, int $userId): array;
}
<?php
/**
 * This file is part of Modulpos package.
 *
 * @author Anton Kartsev <anton@alarmcrm.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Brandshopru\ModulposApiClient\Contracts;

/**
 * Interface ModulposPaymentItemInterface.
 */
interface ModulposPaymentItemInterface
{
    /**
     * Тип оплаты
     * CARD - безналичная оплата
     * CASH - оплата наличными.
     *
     * @return string
     */
    public function getType();

    /**
     * Сумма выбранного типа оплаты.
     *
     * @return float
     */
    public function getSum();
}
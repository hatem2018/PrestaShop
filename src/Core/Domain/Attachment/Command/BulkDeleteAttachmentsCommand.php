<?php
/**
 * 2007-2019 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\PrestaShop\Core\Domain\Attachment\Command;

use PrestaShop\PrestaShop\Core\Domain\Attachment\ValueObject\AttachmentId;

/**
 * Bulk delete attachment command is responsible for deleting Attachment
 */
class BulkDeleteAttachmentsCommand
{
    /**
     * @var AttachmentId[]
     */
    private $attachmentIds;

    /**
     * @param int[] $attachmentIds
     */
    public function __construct(array $attachmentIds)
    {
        $this->setAttachmentIds($attachmentIds);
    }

    /**
     * @return AttachmentId[]
     */
    public function getAttachmentIds(): array
    {
        return $this->attachmentIds;
    }

    /**
     * @param array $attachmentIds
     */
    private function setAttachmentIds(array $attachmentIds)
    {
        foreach ($attachmentIds as $attachmentId) {
            $this->attachmentIds[] = new AttachmentId($attachmentId);
        }
    }
}

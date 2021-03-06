<?php
/* 
 * @package MagentoGarage/Testimonials
 * @category Model
 * @author Aman Srivastava <http://amansrivastava.in>
 *
 */

namespace MagentoGarage\Testimonials\Model;

use MagentoGarage\Testimonials\Api\Data\TestimonialInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Testimonial  extends \Magento\Framework\Model\AbstractModel implements TestimonialInterface, IdentityInterface
{

    /**#@+
     * Testimonial's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'testimonial';

    /**
     * @var string
     */
    protected $_cacheTag = 'testimonial';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'testimonial';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MagentoGarage\Testimonials\Model\ResourceModel\Testimonial');
    }

    /**
     * Prepare testimonial's statuses.
     * Available event testimonial_get_available_statuses to customize statuses.
     *
     * @return array
     */
    public function getAvailableStatuses()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }
    /**
     * Return unique ID(s) for each object in system
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::TESTIMONIAL_ID);
    }

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Get email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive()
    {
        return (bool) $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set ID
     *
     * @param int $id
<<<<<<< HEAD
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
=======
     * @return \MagentoGarage\Testimonials\Api\Data\TestimonialInterface
>>>>>>> Updates
     */
    public function setId($id)
    {
        return $this->setData(self::TESTIMONIAL_ID, $id);
    }

    /**
     * Set name
     *
     * @param string $name
<<<<<<< HEAD
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
=======
     * @return \MagentoGarage\Testimonials\Api\Data\TestimonialInterface
>>>>>>> Updates
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Set email
     *
     * @param string $email
<<<<<<< HEAD
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
=======
     * @return \MagentoGarage\Testimonials\Api\Data\TestimonialInterface
>>>>>>> Updates
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Set content
     *
     * @param string $content
<<<<<<< HEAD
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
=======
     * @return \MagentoGarage\Testimonials\Api\Data\TestimonialInterface
>>>>>>> Updates
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
<<<<<<< HEAD
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
=======
     * @return \MagentoGarage\Testimonials\Api\Data\TestimonialInterface
>>>>>>> Updates
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
<<<<<<< HEAD
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
=======
     * @return \MagentoGarage\Testimonials\Api\Data\TestimonialInterface
>>>>>>> Updates
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

    /**
     * Set is active
     *
     * @param int|bool $is_active
<<<<<<< HEAD
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
=======
     * @return \MagentoGarage\Testimonials\Api\Data\TestimonialInterface
>>>>>>> Updates
     */
    public function setIsActive($is_active)
    {
        return $this->setData(self::IS_ACTIVE, $is_active);
    }
}

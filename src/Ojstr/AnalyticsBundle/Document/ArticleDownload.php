<?php

namespace Ojstr\AnalyticsBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * This collection keeps page information and download action details *without total count*
 * There will be one record for each paths
 * @MongoDb\Document(collection="analytics_downloadsum_article") 
 */
class ArticleDownloads extends ArticleStatsBase {

    /**
     * @MongoDb\String
     */
    protected $filePath;

    /**
     * Optional 
     * @MongoDb\Int  
     */
    protected $transferSize;

    /**
     * Set transferSize
     *
     * @param int $transferSize
     * @return self
     */
    public function setTransferSize($transferSize) {
        $this->transferSize = $transferSize;
        return $this;
    }

    /**
     * Get transferSize
     *
     * @return int $transferSize
     */
    public function getTransferSize() {
        return $this->transferSize;
    }

    /**
     * Page full url with domain
     * Set filePath
     *
     * @param string $filePath
     * @return self
     */
    public function setFilePath($filePath) {
        $this->filePath = $filePath;
        return $this;
    }

    /**
     * Get filePath
     *
     * @return string $filePath
     */
    public function getFilePath() {
        return $this->filePath;
    }

}

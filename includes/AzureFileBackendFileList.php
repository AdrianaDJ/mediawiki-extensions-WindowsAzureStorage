<?php
/**
 * Iterator for listing regular files
 */
class AzureFileBackendFileList extends AzureFileBackendList {
	/**
	 * @see Iterator::current()
	 * @return string|bool String (relative path) or false
	 */
	public function current() {
		return substr( current( $this->bufferIter ), $this->suffixStart );
	}

	/**
	 * @see AzureFileBackendList::pageFromList()
	 * @param string $container
	 * @param string $dir
	 * @param string|null &$after
	 * @param int $limit
	 * @param array $params
	 * @return array|null
	 */
	public function pageFromList( $container, $dir, &$after, $limit, array $params ) {
		return $this->backend->getFileListPageInternal( $container, $dir, $after, $limit, $params );
	}
}

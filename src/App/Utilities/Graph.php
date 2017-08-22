<?php 

namespace App\Core\Utilities;

class Graph {
	public $nodes;
	public $edges;
	private $next_nodes;

	public function __construct($arr) {
		$this->nodes = $arr;
		$next_nodes = NULL;
	}

	public function BFStraversal($node) {
		$node = $this->nodes[$node];
		$node = $node[0];
		// var_dump($node);
		$node->level = 1;
		$queue = [$node];
		$current_level = $node->level;
		$output = [];
		$edges = [];
		while(count($queue) > 0) {
			$current_node = array_shift($queue);

			// STORING INFORMATION ABOUT CURRENT NODE
			if($current_node->level > $current_level) {
				$current_level++;
			}
			array_push($output, $current_node->info);
			
			

			// ITERATING OVER NEXT NODES AND QUEUEING THEM
			if (array_key_exists($current_node->info, $this->edges)) {
				array_push($edges, $current_node->info);
				$edges[$current_node->info] = [];
				$this->next_nodes = $this->edges[$current_node->info];
				foreach($this->next_nodes as $next_node) {
					$next_node = $this->nodes[$next_node];
					$next_node = $next_node[0];

					array_push($edges[$current_node->info], $next_node->info);

					if($next_node->level == NULL) {
						$next_node->level = $current_level + 1;
						array_push($queue, $next_node);
					} 

					if($next_node->level <= $current_level) {

					}
				}
			}
		}
		return [
			'nodes' => $output,
			'edges' => $edges
		];
	}
};
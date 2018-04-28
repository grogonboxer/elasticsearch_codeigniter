<?php
	function build($table){
		$link = mysqli_connect("192.168.1.120", "root", "", "dpjia_2018_dev_local");
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		$sql='desc pre_'.$table;
		$db_result = mysqli_query($link, $sql);
		$arr = mysqli_fetch_all($db_result,MYSQLI_ASSOC); 
		foreach ($arr as $value) {
			if($value['Key'] == 'PRI'){
				$result['id'] = $value['Field'];
			}
		}
		$result['mapping']['_source'] = [
			'enabled' => true
		];
		$result['mapping']['_all'] = [
			'index' => 'analyzed',
			'analyzer' => 'ik_max_word'
		];
		foreach ($arr as $value) {
			$types = explode('(', $value['Type']);
			switch ($types[0]) {
				case 'int':
					$result['mapping']['properties'][$value['Field']] = [
						'type' => 'long'
					];
					break;
				case 'tinyint':
					$result['mapping']['properties'][$value['Field']] = [
						'type' => 'long'
					];
					break;
				case 'bigint':
					$result['mapping']['properties'][$value['Field']] = [
						'type' => 'long'
					];
					break;
				case 'float':
					$result['mapping']['properties'][$value['Field']] = [
						'type' => 'double'
					];
					break;
				case 'decimal':
					$result['mapping']['properties'][$value['Field']] = [
						'type' => 'double'
					];
					break;
				case 'varchar':
					$result['mapping']['properties'][$value['Field']] = [
						'type' => 'text'
					];
					break;
				case 'char':
					$result['mapping']['properties'][$value['Field']] = [
						'type' => 'keyword'
					];
					break;
				default:
					$result['mapping']['properties'][$value['Field']] = [
						'type' => 'text'
					];
					break;
			}
		}
		return $result;
	}

	$data = build('stock');
	
	echo '<?php defined(\'BASEPATH\') OR exit(\'No direct script access allowed\');';
	echo "\n\n";
	echo '$config = ';
	var_export($data);
	echo ';';
<?php

	class IndexController
	{

		public function actionIndex()
		{

			include_once(ROOT.'/views/index.php');
			return true;

		}

	}
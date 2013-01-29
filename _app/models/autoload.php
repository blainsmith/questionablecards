<?php

foreach(glob('_app/models/*.php') as $file) {
	require_once $file;
}
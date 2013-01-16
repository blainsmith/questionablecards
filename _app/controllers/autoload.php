<?php

foreach(glob('_app/controllers/*.php') as $file) {
	require_once $file;
}
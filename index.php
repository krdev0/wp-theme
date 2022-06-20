<?php

$post = new Timber\Post();
$context = Timber::context();
$context['post'] = $post;

dump($context);

Timber::render( 'index.twig', $context );
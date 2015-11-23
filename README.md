## P2P Connections

Registers Posts-to-Posts connection. Requires Posts 2 Posts plugin.

### Usage

```
$settings = array(
  array(
    'name' => 'posts_to_pages',
    'from' => 'post',
    'to' => 'page'
  ),
  array(
    'name' => 'posts_to_pages',
    'from' => 'post',
    'to' => 'page'
  )  
);
$ClientPostConnections = new ClientPostConnections( $settings );
```

### Parameters

`$settings` (required): Array of P2P connection settings. See https://github.com/scribu/wp-posts-to-posts/wiki/p2p_register_connection_type.

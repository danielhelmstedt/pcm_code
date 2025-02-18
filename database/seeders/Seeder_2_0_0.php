<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Seeder_1_0_0 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Version
        $version = '1.0.0';

        // attributes_port_orientation
        $portOrientationArray = [
            [ 'value' => 1, 'name' => 'Top-Left to Right', 'default' => 1],
            [ 'value' => 2, 'name' => 'Top-Left to Bottom', 'default' => 0],
            [ 'value' => 3, 'name' => 'Top-Right to Left', 'default' => 0],
            [ 'value' => 4, 'name' => 'Bottom-Left to Right', 'default' => 0],
            [ 'value' => 5, 'name' => 'Bottom-Left to Top', 'default' => 0]
        ];

        foreach($portOrientationArray as $portOrientation) {
            DB::table('attributes_port_orientation')->insert($portOrientation);
        }

        // attributes_port_connector
        $portConnectorArray = [
            [ 'value' => 1, 'name' => 'Unspecified',    'type_id' => 1, 'default' => 0],

            [ 'value' => 2, 'name' => 'RJ45',           'type_id' => 2, 'default' => 1],

            [ 'value' => 3, 'name' => 'LC',             'type_id' => 3, 'default' => 0],
            [ 'value' => 4, 'name' => 'SC',             'type_id' => 3, 'default' => 0],
            [ 'value' => 5, 'name' => 'ST',             'type_id' => 3, 'default' => 0],
            [ 'value' => 6, 'name' => 'MPO-12',         'type_id' => 3, 'default' => 0],
            [ 'value' => 7, 'name' => 'MPO-24',         'type_id' => 3, 'default' => 0],
            [ 'value' => 8, 'name' => 'SFP',            'type_id' => 1, 'default' => 0],
            [ 'value' => 9, 'name' => 'QSFP',           'type_id' => 1, 'default' => 0],

            [ 'value' => 10, 'name' => 'BNC',            'type_id' => 4, 'default' => 0],

            [ 'value' => 11, 'name' => 'XLR-3M',         'type_id' => 5, 'default' => 0],
            [ 'value' => 12, 'name' => 'XLR-3F',         'type_id' => 5, 'default' => 0],
            [ 'value' => 13, 'name' => 'XLR-5M',         'type_id' => 6, 'default' => 0],
            [ 'value' => 14, 'name' => 'XLR-5F',         'type_id' => 6, 'default' => 0],

        ];

        foreach($portConnectorArray as $portConnector) {
            DB::table('attributes_port_connector')->insert($portConnector);
        }

        // attributes_cable_connector
        $cableConnectorArray = [
            [ 'value' => 1, 'name' => 'Unspecified', 'default' => 0],

            //Copper connectors
            [ 'value' => 2, 'name' => 'RJ45', 'default' => 1],

            // Fiber connectors
            [ 'value' => 3, 'name' => 'LC', 'default' => 0],
            [ 'value' => 4, 'name' => 'SC', 'default' => 0],
            [ 'value' => 5, 'name' => 'ST', 'default' => 0],
            [ 'value' => 6, 'name' => 'MPO-12', 'default' => 0],
            [ 'value' => 7, 'name' => 'MPO-24', 'default' => 0],

            // Coaxial connectors
            [ 'value' => 8, 'name' => 'BNC', 'default' => 0],

            // Audio connectors
            [ 'value' => 9, 'name' => 'XLR-3M','default' => 0],
            [ 'value' => 10, 'name' => 'XLR-3F', 'default' => 0],

            //Lighting connectors
            [ 'value' => 11, 'name' => 'XLR-5M', 'default' => 0],
            [ 'value' => 12, 'name' => 'XLR-5F', 'default' => 0],
    
        ];

        foreach($cableConnectorArray as $cableConnector) {
            DB::table('attributes_cable_connector')->insert($cableConnector);
        }

        // attributes_media //
        $mediaArray = [
            [ 'value' => 1, 'name' => 'Unspecified', 'category_id' => 1, 'type_id' => 1, 'display' => 0, 'default' => 0],

            //Copper  cabling
            [ 'value' => 2, 'name' => 'Cat5e', 'category_id' => 2, 'type_id' => 2, 'display' => 1, 'default' => 1],
            [ 'value' => 3, 'name' => 'Cat6', 'category_id' => 2, 'type_id' => 2, 'display' => 1, 'default' => 0],
            [ 'value' => 4, 'name' => 'Cat6a', 'category_id' => 2, 'type_id' => 2, 'display' => 1, 'default' => 0],

            // Fiber cabling
            [ 'value' => 5, 'name' => 'SM-OS1', 'category_id' => 3, 'type_id' => 3, 'display' => 1, 'default' => 0],
            [ 'value' => 6, 'name' => 'MM-OM4', 'category_id' => 4, 'type_id' => 3, 'display' => 1, 'default' => 0],
            [ 'value' => 7, 'name' => 'MM-OM3', 'category_id' => 4, 'type_id' => 3, 'display' => 1, 'default' => 0],

            // Video/SDI cabling
            [ 'value' => 8, 'name' => 'HD-SDI', 'category_id' => 5, 'type_id' => 4, 'display' => 1, 'default' => 0],
            [ 'value' => 9, 'name' => '3G-SDI', 'category_id' => 5, 'type_id' => 4, 'display' => 1, 'default' => 0],
            [ 'value' => 10, 'name' => '6G-SDI', 'category_id' => 5, 'type_id' => 4, 'display' => 1, 'default' => 0],
            [ 'value' => 11, 'name' => '12G-SDI', 'category_id' => 5, 'type_id' => 4, 'display' => 1, 'default' => 0],

            // Audio cabling
            [ 'value' => 12, 'name' => '2-Core Shielded', 'category_id' => 6, 'type_id' => 5, 'display' => 1, 'default' => 0],

            // Lighting cabling
            [ 'value' => 13, 'name' => '4-Core Shielded', 'category_id' => 6, 'type_id' => 5, 'display' => 1, 'default' => 0],

        ];

        foreach($mediaArray as $media) {
            DB::table('attributes_media')->insert($media);
        }

        // attributes_media_category
        $mediaCategoryArray = [
            [ 'value' => 1, 'name' => 'Unspecified', 'default' => 0],
            [ 'value' => 2, 'name' => 'Network', 'default' => 1],
            [ 'value' => 3, 'name' => 'Singlemode Fiber', 'default' => 0],
            [ 'value' => 4, 'name' => 'Multimode Fiber', 'default' => 0],
            [ 'value' => 5, 'name' => 'Video', 'default' => 0],
            [ 'value' => 6, 'name' => 'Audio', 'default' => 0],
            [ 'value' => 7, 'name' => 'Lighting', 'default' => 0],

        ];

        foreach($mediaCategoryArray as $mediaCategory) {
            DB::table('attributes_media_category')->insert($mediaCategory);
        }
        
        // attributes_media_type
        $mediaTypeArray = [
            [ 'value' => 1, 'name' => 'Unspecified', 'unit_of_length' => 'm.'],
            [ 'value' => 2, 'name' => 'Copper', 'unit_of_length' => 'm.'],
            [ 'value' => 3, 'name' => 'Fiber', 'unit_of_length' => 'm.'],
            [ 'value' => 4, 'name' => 'Coaxial', 'unit_of_length' => 'm.'],
            [ 'value' => 5, 'name' => 'Balanced', 'unit_of_length' => 'm.'],

        ];

        foreach($mediaTypeArray as $mediaType) {
            DB::table('attributes_media_type')->insert($mediaType);
        }

        
        // floorplan_template
        $floorplanTemplateArray = [
            [ 'type' => 'device', 'name' => 'Device', 'icon' => 'MonitorIcon', 'function' => 'endpoint'],
            [ 'type' => 'camera', 'name' => 'Camera', 'icon' => 'VideoIcon', 'function' => 'endpoint'],
            [ 'type' => 'wap', 'name' => 'WAP', 'icon' => 'WifiIcon', 'function' => 'endpoint'],
            [ 'type' => 'walljack', 'name' => 'Walljack', 'icon' => 'GridIcon', 'function' => 'passive'],
        ];

        foreach($floorplanTemplateArray as $floorplanTemplate) {
            DB::table('floorplan_template')->insert($floorplanTemplate);
        }

        // location
        $LocationArray = [
            [ 'created_at' => now(), 'updated_at' => now(), 'name' => 'Location', 'parent_id' => 0, 'type' => 'location']
        ];

        foreach($LocationArray as $location) {
            DB::table('location')->insert($location);
        }

        // category
        $categoryArray = [
            [ 'id' => 1, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Patch_Panel', 'color' => '#9B9B9BFF', 'default' => 1],
            [ 'id' => 2, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Switch', 'color' => '#B8E986FF', 'default' => 0],
            [ 'id' => 3, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Router', 'color' => '#4A90E2FF', 'default' => 0],
            [ 'id' => 4, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Server', 'color' => '#50E3C2FF', 'default' => 0]
        ];

        foreach($categoryArray as $category) {
            DB::table('category')->insert($category);
        }

        // template
        $templateArray = [
            [ 'id' => 1, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Switch', 'category_id' => 2, 'type' => 'standard', 'ru_size' => 1, 'function' => 'endpoint', 'mount_config' => '4-post', 'blueprint' => '{"front":[{"type":"connectable","units":20,"children":[],"port_format":[{"type":"static","value":"G1\/0\/","count":0,"order":0},{"type":"incremental","value":"1","count":0,"order":1}],"port_layout":{"cols":24,"rows":2},"media":1,"port_connector":1,"port_orientation":2},{"type":"enclosure","units":4,"children":[],"enc_layout":{"cols":1,"rows":1}}],"rear":[{"type":"generic","units":1,"children":[{"type":"connectable","units":1,"children":[],"port_format":[{"type":"static","value":"Con","count":0,"order":0}],"port_layout":{"cols":1,"rows":1},"media":1,"port_connector":1,"port_orientation":1},{"type":"connectable","units":1,"children":[],"port_format":[{"type":"static","value":"Mgmt","count":0,"order":0}],"port_layout":{"cols":1,"rows":1},"media":1,"port_connector":1,"port_orientation":1}]}]}'],
        ];

        foreach($templateArray as $template) {
            DB::table('template')->insert($template);
        }

        // attributes_history_function
        $historyFunctionArray = [
            [ 'value' => 1, 'name' => 'Build->Templates'],
            [ 'value' => 2, 'name' => 'Build->Cabinets'],
            [ 'value' => 3, 'name' => 'Explore'],
            [ 'value' => 4, 'name' => 'Scan'],
            [ 'value' => 5, 'name' => 'Inventory'],
            [ 'value' => 6, 'name' => 'Admin->General'],
            [ 'value' => 7, 'name' => 'Admin->Integration']
        ];

        foreach($historyFunctionArray as $historyFunction) {
            DB::table('attributes_history_function')->insert($historyFunction);
        }

        // attributes_history_action
        $historyActionArray = [
            [ 'value' => 1, 'name' => 'Create'],
            [ 'value' => 2, 'name' => 'Update'],
            [ 'value' => 3, 'name' => 'Delete']
        ];

        foreach($historyActionArray as $historyAction) {
            DB::table('attributes_history_action')->insert($historyAction);
        }

        // tenant
        $appID = $this->guidv4();
        $licenseData = [
            'status' => 'inactive',
            'expiration' => null,
            'entitlement' => [
                'cabinet' => 10,
                'object' => 20,
                'connection' => 40,
                'user' => 2,
            ]
        ];
        $tenant = [ 'name' => 'Acme', 'license_last_checked' => time(), 'license_data' => json_encode($licenseData), 'app_id' => $appID, 'version' => $version];

        DB::table('organization')->insert($tenant);
    }

    /**
     * Generate UUID
     *
     * @return str
     */
    public function guidv4()
    {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}

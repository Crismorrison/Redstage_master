<?xml version="1.0" encoding="UTF-8"?>
<listing xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Ui:etc/ui_configuration.xsd">

    <container name="listing_top">
       <massaction name="listing_massaction">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="selectProvider" xsi:type="string">redstage_item_listing.redstage_item_listing.redstage_item_columns.ids</item>
                    <item name="indexField" xsi:type="string">id</item>
                </item>
            </argument>
            <action name="disable">
                <argument name="data" xsi:type="array">
                    <item name="config" xsi:type="array">
                        <item name="type" xsi:type="string">disable</item>
                        <item name="label" xsi:type="string" translate="true">Disable</item>
                        <item name="url" xsi:type="url" path="weblog/blog/massDisable"/>
                    </item>
                </argument>
            </action>
            <action name="enable">
                <argument name="data" xsi:type="array">
                    <item name="config" xsi:type="array">
                        <item name="type" xsi:type="string">enable</item>
                        <item name="label" xsi:type="string" translate="true">Enable</item>
                        <item name="url" xsi:type="url" path="weblog/blog/massEnable"/>
                    </item>
                </argument>
            </action>
        </massaction>
    </container>
</listing>

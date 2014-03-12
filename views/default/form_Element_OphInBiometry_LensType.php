<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>

<section class="element <?php echo $element->elementType->class_name?>"
	data-element-type-id="<?php echo $element->elementType->id?>"
	data-element-type-class="<?php echo $element->elementType->class_name?>"
	data-element-type-name="<?php echo $element->elementType->name?>"
	data-element-display-order="<?php echo $element->elementType->display_order?>">
	<div class="element-fields">
		<div class="row">
			<div class="large-8 column">
		<?php echo $form->dropDownList($element, 'lens_id', CHtml::listData(OphInBiometry_LensType_Lens::model()->findAll(array('order'=> 'display_order asc')),'id','name'),array('empty'=>'- Please select -'),null,array('label'=>2, 'field'=>6))?>
			</div>
		</div>
		<div class="row">
			<div class="large-8 column">
				<div class="row field-row">
					<div class="large-2 column">
						<span class="field-info">Description:</span>
					</div>
					<div class="large-10 column">
						<span id="type" class="field-info"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-8 column">
				<div class="row field-row">
					<div class="large-2 column">
						<span class="field-info">A constant:</span>
					</div>
					<div class="large-10 column">
						<span id="acon" class="field-info"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-8 column">
				<div class="row field-row">
					<div class="large-2 column">
						<span class="field-info">SF:</span>
					</div>
					<div class="large-10 column">
						<span id="sf" class="field-info"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-8 column">
				<div class="row field-row">
					<div class="large-2 column">
						<span class="field-info">Position:</span>
					</div>
					<div class="large-10 column">
						<span id="position" class="field-info"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-8 column">
				<div class="row field-row">
					<div class="large-2 column">
						<span class="field-info">Comments:</span>
					</div>
					<div class="large-10 column">
						<span id="comments" class="field-info"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

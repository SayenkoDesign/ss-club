/**
 * Image Block Styles.
 *
 * This file exports all of the styles for the image block.
 *
 * @package   Exhale
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2019 Justin Tadlock
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://themehybrid.com/themes/exhale
 */

let labels = exhaleEditor.labels;

export default {
	name  : 'core/list',
	styles : [
		{
			name      : 'default',
			label     : labels.default,
			isDefault : true
		},
		{
			name  : 'list-none',
			label : labels[ 'list-none' ]
		},
		{
			name  : 'list-disc',
			label : labels[ 'list-disc' ]
		},
		{
			name  : 'list-circle',
			label : labels[ 'list-circle' ]
		},
		{
			name  : 'list-square',
			label : labels[ 'list-square' ]
		}
	]
};

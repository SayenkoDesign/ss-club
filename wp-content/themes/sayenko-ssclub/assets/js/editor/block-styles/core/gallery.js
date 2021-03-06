/**
 * Gallery Block Styles.
 *
 * This file exports all of the styles for the gallery block.
 *
 * @package   Exhale
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2019 Justin Tadlock
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://themehybrid.com/themes/exhale
 */

let labels = exhaleEditor.labels;

export default {
	name   : 'core/gallery',
	styles : [
		{
			name      : 'default',
			label     : labels.default,
			isDefault : true
		},
		{
			name  : 'reverse',
			label : labels.reverse,
		},
	//	{
	//		name  : 'shadow',
	//		label : labels.shadow
	//	}
	]
};

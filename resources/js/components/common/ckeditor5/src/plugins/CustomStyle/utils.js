export const customStyles = [
  {
    type: 'default',
    label: 'Default',
    style: {}
  },
  {
    type: 'apply1',
    label: 'Apply1',
    style: {
      'color': 'red',
    },
  },
  {
    type: 'apply2',
    label: 'Apply2',
    style: {
      'color': 'yellow'
    },
  }
];

export function isDefault( type ) {
  return type === 'default';
}

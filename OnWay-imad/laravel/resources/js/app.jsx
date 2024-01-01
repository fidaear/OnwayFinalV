
import React, { useState } from 'react';

const OverlappingInput = () => {
  const [inputValue, setInputValue] = useState('');

  const handleInputChange = (e) => {
    setInputValue(e.target.value);
  };

  return (
    <div style={{ position: 'relative', marginBottom: '20px' }}>
      {/* Existing Input Areas */}
      <input type="text" placeholder="Input 1" style={{ marginBottom: '10px' }} />
      <input type="text" placeholder="Input 2" style={{ marginBottom: '10px' }} />

      {/* New Overlapping Input Area */}
      <input
        type="text"
        placeholder="Overlapping Input"
        style={{
          position: 'absolute',
          top: '0',
          left: '0',
          zIndex: '1', // Make sure it's on top of the other inputs
          border: '2px solid red', // Optional: Add some styling
        }}
        value={inputValue}
        onChange={handleInputChange}
      />
    </div>
  );
};

export default OverlappingInput;


import './bootstrap';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


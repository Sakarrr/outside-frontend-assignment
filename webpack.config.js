const path = require('path');

module.exports = {
    entry: './assets/js/block.js',
    output: {
        path: path.resolve(__dirname, 'assets/js'),
        filename: 'block.bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env', '@babel/preset-react']
                    }
                }
            }
        ]
    }
};
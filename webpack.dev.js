const path = require('path');
const common = require('./webpack.common');
const { merge } = require('webpack-merge');

module.exports = merge(common, {
  mode: "development",
  entry: {
    app: path.resolve(__dirname, 'src/index.js')
  },
  devtool: 'source-map',
});